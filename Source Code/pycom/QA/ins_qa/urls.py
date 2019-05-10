from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('get_min',views.get_min,name = 'get_min'),
    path('get_questiong',views.get_questiong , name = 'get_questiong')
]