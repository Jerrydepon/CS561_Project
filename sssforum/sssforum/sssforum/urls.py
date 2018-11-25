"""sssforum URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from django.views.static import serve
from discussion.views import index, writeSubject, postSubject, readSubject, addComment, postComment
from django.conf.urls import url
from django.contrib import admin
admin.autodiscover()

urlpatterns = [
    path('admin/', admin.site.urls),
    url(r'^$', index),
    url(r'^writeSubject/$', writeSubject),
    url(r'^postSubject/$', postSubject),
    url(r'^(?P<subject_id>\d+)/$', readSubject),
    url(r'^(?P<subject_id>\d+)/add/$', addComment),
    url(r'^(?P<subject_id>\d+)/postComment/$', postComment),

    url(r'^scripts/(?P<path>.*)$', serve, {'document_root': './scripts'}),
    path('scripts/', serve, {'document_root': './scripts'}),
    path(r'^scripts/(?P<path>.*)$', serve, {'document_root': './scripts'}),
]
