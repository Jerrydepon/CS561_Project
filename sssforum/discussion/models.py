# Create your models here.
from django.db import models
from django.contrib import admin
 
class Subject(models.Model):
    title = models.CharField(max_length=128)
    name = models.CharField(max_length=64)
    date = models.DateTimeField('date')
    content = models.TextField()
 
class Comment(models.Model):
    reference = models.ForeignKey(Subject, on_delete=models.CASCADE,)
    name = models.CharField(max_length=64)
    date = models.DateTimeField('date')
    content = models.TextField()
 
    try:
        admin.site.register(Subject)
        admin.site.register(Comment)
    # except admin.site.AlreadyRegistered:
    except:
        pass