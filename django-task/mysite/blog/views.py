from django.shortcuts import render
from django.views.generic import CreateView
from django.http import HttpResponse
from .models import Post

def home(request):
    context = {
        'posts':Post.objects.all()
    }
    return render(request,'blog/home.html',context)

class PostCreateView(CreateView):
    model = Post
    fields = ['title', 'content']
    template_name = 'blog/dash.html'

    def form_valid(self, form):
        form.instance.author =self.request.user
        return super().form_valid(form)

def dash(request):
    return render(request,'blog/dash.html')