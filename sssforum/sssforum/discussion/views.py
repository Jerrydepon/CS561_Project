from django.shortcuts import render

# Create your views here.
from django.shortcuts import render_to_response, get_object_or_404
from discussion.models import Subject, Comment
from django.http import HttpResponseRedirect
from datetime import datetime
from django.views.decorators.csrf import csrf_exempt

def index(request):
    subject_list = Subject.objects.all().order_by('date')[:]
    return render_to_response('templates/index.html', {'subject_list': subject_list})

def writeSubject(request):
    return render_to_response('templates/new.html')

@csrf_exempt
def postSubject(request):
    s = Subject()
    s.title = request.POST['title']
    s.name = request.POST['name']
    s.content = request.POST['content']
    s.date = datetime.now()
    s.save()
    return HttpResponseRedirect('/%s/' % s.id)

def readSubject(request, subject_id):
    subject = get_object_or_404(Subject, pk=subject_id)
    return render_to_response('templates/read.html', {'subject': subject, 'comments':subject.comment_set.all()})

def addComment(request, subject_id):
    subject = get_object_or_404(Subject, pk=subject_id)
    return render_to_response('templates/reply.html', {'subject': subject})

@csrf_exempt
def postComment(request, subject_id):
    s = get_object_or_404(Subject, pk=subject_id)
    c = s.comment_set.create(name=request.POST['name'], content=request.POST['content'], date=datetime.now())
    c.save()
    return HttpResponseRedirect('/%s/' % s.id)