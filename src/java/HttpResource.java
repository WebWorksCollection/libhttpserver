/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.4
 *
 * Do not make changes to this file unless you know what you are doing--modify
 * the SWIG interface file instead.
 * ----------------------------------------------------------------------------- */


public class HttpResource {
  private long swigCPtr;
  protected boolean swigCMemOwn;

  public HttpResource(long cPtr, boolean cMemoryOwn) {
    swigCMemOwn = cMemoryOwn;
    swigCPtr = cPtr;
  }

  public static long getCPtr(HttpResource obj) {
    return (obj == null) ? 0 : obj.swigCPtr;
  }

  protected void finalize() {
    delete();
  }

  public synchronized void delete() {
    if (swigCPtr != 0) {
      if (swigCMemOwn) {
        swigCMemOwn = false;
        libjavawebserver_frameworkJNI.delete_HttpResource(swigCPtr);
      }
      swigCPtr = 0;
    }
  }

  protected void swigDirectorDisconnect() {
    swigCMemOwn = false;
    delete();
  }

  public void swigReleaseOwnership() {
    swigCMemOwn = false;
    libjavawebserver_frameworkJNI.HttpResource_change_ownership(this, swigCPtr, false);
  }

  public void swigTakeOwnership() {
    swigCMemOwn = true;
    libjavawebserver_frameworkJNI.HttpResource_change_ownership(this, swigCPtr, true);
  }

  public HttpResource() {
    this(libjavawebserver_frameworkJNI.new_HttpResource(), true);
    libjavawebserver_frameworkJNI.HttpResource_director_connect(this, swigCPtr, swigCMemOwn, true);
  }

  public HttpResponse render(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_renderSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_404() {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_404(swigCPtr, this) : libjavawebserver_frameworkJNI.HttpResource_render_404SwigExplicitHttpResource(swigCPtr, this), true);
  }

  public HttpResponse render_500() {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_500(swigCPtr, this) : libjavawebserver_frameworkJNI.HttpResource_render_500SwigExplicitHttpResource(swigCPtr, this), true);
  }

  public HttpResponse render_405() {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_405(swigCPtr, this) : libjavawebserver_frameworkJNI.HttpResource_render_405SwigExplicitHttpResource(swigCPtr, this), true);
  }

  public HttpResponse render_GET(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_GET(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_GETSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_POST(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_POST(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_POSTSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_PUT(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_PUT(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_PUTSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_HEAD(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_HEAD(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_HEADSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_DELETE(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_DELETE(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_DELETESwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_TRACE(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_TRACE(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_TRACESwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_OPTIONS(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_OPTIONS(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_OPTIONSSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse render_CONNECT(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_render_CONNECT(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_render_CONNECTSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public HttpResponse routeRequest(HttpRequest arg0) {
    return new HttpResponse((getClass() == HttpResource.class) ? libjavawebserver_frameworkJNI.HttpResource_routeRequest(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0) : libjavawebserver_frameworkJNI.HttpResource_routeRequestSwigExplicitHttpResource(swigCPtr, this, HttpRequest.getCPtr(arg0), arg0), true);
  }

  public void setAllowing(String method, boolean a) {
    libjavawebserver_frameworkJNI.HttpResource_setAllowing(swigCPtr, this, method, a);
  }

  public void allowAll() {
    libjavawebserver_frameworkJNI.HttpResource_allowAll(swigCPtr, this);
  }

  public void disallowAll() {
    libjavawebserver_frameworkJNI.HttpResource_disallowAll(swigCPtr, this);
  }

  public boolean isAllowed(String method) {
    return libjavawebserver_frameworkJNI.HttpResource_isAllowed(swigCPtr, this, method);
  }

}
