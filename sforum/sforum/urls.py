"""sforum URL Configuration

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
# from django.contrib.auth import views as auth_views
# from myapp import views as myapp_views
from django.conf.urls import *
from django.conf.urls import url
from django.contrib import admin
from sforum.forum import views
from django.views.static import serve
from django.conf.urls.static import static

urlpatterns = [
    path('admin/', admin.site.urls),
    path('scripts/', serve, {'document_root': './scripts'}), 
    path('', views.index, name='index'),
    path('writeSubject/', views.writeSubject, name='writeSubject'),
    path('postSubject/', views.postSubject, name='postSubject'),
    # path(r'^(?P<subject_id>\d+)/$', views.readSubject, name='readSubject'),

    # path(r'^scripts/(?P<path>.*)$', serve, {'document_root': './scripts'}), 
    # path(r'^$', views.index, name='index'),
    # path(r'^writeSubject/$', views.writeSubject, name='writeSubject'),
    # path(r'^postSubject/$', views.postSubject, name='postSubject'),
    # path(r'^(?P<subject_id>\d+)/$', views.readSubject, name='readSubject'),
]