from .views import *
from django.conf.urls import url
from .views import PostCreateView

urlpatterns = [
    url(r'homepage/', view = home, name='blog-home'),
    url(r'dashboard/', view = dash),
    url(r'new/', PostCreateView.as_view()),
]