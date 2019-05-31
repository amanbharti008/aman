from .views import *
from django.conf.urls import url

urlpatterns = [
    url(r'', view = index),
]
