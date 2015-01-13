from django.conf.urls import patterns, include, url
from vsee import views
from django.contrib import admin

admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'vc.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^$', views.search),
    url(r'^results/(?P<number>[0-9])/(?P<queryparam1>[a-z 0-9 A-Z %]*)/(?P<queryparam2>[a-z 0-9 A-Z %]*)/(?P<queryparam3>[a-z 0-9 A-Z %]*)/(?P<vc1>[a-z 0-9 A-Z %]*)/(?P<vc2>[a-z 0-9 A-Z %]*)/(?P<vc3>[a-z 0-9 A-Z %]*)/(?P<vc4>[a-z 0-9 A-Z %]*)/$', views.vclist),
    url(r'^results/detail/(?P<vc1>[a-z 0-9 A-Z %]*)/$', views.vcdetail)
)
