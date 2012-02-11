/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.4
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

#ifndef SWIG_LIBPHPWEBSERVER_FRAMEWORK_WRAP_H_
#define SWIG_LIBPHPWEBSERVER_FRAMEWORK_WRAP_H_

class SwigDirector_HttpResource : public HttpResource, public Swig::Director {

public:
    SwigDirector_HttpResource(zval *self);
    virtual ~SwigDirector_HttpResource();
    virtual HttpResponse render(HttpRequest const &arg0);
    virtual HttpResponse render_404();
    virtual HttpResponse render_500();
    virtual HttpResponse render_405();
    virtual HttpResponse render_GET(HttpRequest const &arg0);
    virtual HttpResponse render_POST(HttpRequest const &arg0);
    virtual HttpResponse render_PUT(HttpRequest const &arg0);
    virtual HttpResponse render_HEAD(HttpRequest const &arg0);
    virtual HttpResponse render_DELETE(HttpRequest const &arg0);
    virtual HttpResponse render_TRACE(HttpRequest const &arg0);
    virtual HttpResponse render_OPTIONS(HttpRequest const &arg0);
    virtual HttpResponse render_CONNECT(HttpRequest const &arg0);
    virtual HttpResponse routeRequest(HttpRequest const &arg0);
};

#endif
