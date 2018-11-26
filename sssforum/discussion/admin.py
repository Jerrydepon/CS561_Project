from django.contrib import admin

# Register your models here.
from django.contrib import admin
from discussion.models import Subject, Comment

# python manage.py createsuperuser 

class SubjectAdmin(admin.ModelAdmin):
    list_display = ('title', 'name', 'date', 'content')
    list_filter = ('date',)
    ordering = ('-date',)
 
class CommentAdmin(admin.ModelAdmin):
    list_display = ('name', 'date', 'content')
    list_filter = ('date',)
    ordering = ('-date',)
 
    try:
        admin.site.register(Subject, SubjectAdmin)
        admin.site.register(Comment, CommentAdmin)
    except:
        pass