/*
     This file is part of libhttpserver
     Copyright (C) 2011-2019 Sebastiano Merlino

     This library is free software; you can redistribute it and/or
     modify it under the terms of the GNU Lesser General Public
     License as published by the Free Software Foundation; either
     version 2.1 of the License, or (at your option) any later version.

     This library is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
     Lesser General Public License for more details.

     You should have received a copy of the GNU Lesser General Public
     License along with this library; if not, write to the Free Software
     Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301
     USA
*/

#include "littletest.hpp"
#include <curl/curl.h>
#include <string>
#include <map>
#include "httpserver.hpp"
#include "http_utils.hpp"

using namespace httpserver;
using namespace std;
using namespace http;

size_t writefunc(void *ptr, size_t size, size_t nmemb, std::string *s)
{
    s->append((char*) ptr, size*nmemb);
    return size*nmemb;
}

class ok_resource : public http_resource
{
    public:
        const http_response render_GET(const http_request& req)
        {
            return http_response_builder("OK", 200, "text/plain").string_response();
        }
};

LT_BEGIN_SUITE(ban_system_suite)
    void set_up()
    {
    }

    void tear_down()
    {
    }
LT_END_SUITE(ban_system_suite)

LT_BEGIN_AUTO_TEST(ban_system_suite, accept_default_ban_blocks)
    webserver ws = create_webserver(8080).default_policy(http_utils::ACCEPT);
    ws.start(false);

    ok_resource* resource = new ok_resource();
    ws.register_resource("base", resource);

    {
    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_EQ(res, 0);
    LT_CHECK_EQ(s, "OK");
    curl_easy_cleanup(curl);
    }

    {
    ws.ban_ip("127.0.0.1");

    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_NEQ(res, 0);
    curl_easy_cleanup(curl);
    }

    {
    ws.unban_ip("127.0.0.1");

    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_EQ(res, 0);
    LT_CHECK_EQ(s, "OK");
    curl_easy_cleanup(curl);
    }

    ws.stop();
LT_END_AUTO_TEST(accept_default_ban_blocks)

LT_BEGIN_AUTO_TEST(ban_system_suite, reject_default_allow_passes)
    webserver ws = create_webserver(8080).default_policy(http_utils::REJECT);
    ws.start(false);

    ok_resource* resource = new ok_resource();
    ws.register_resource("base", resource);

    {
    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_NEQ(res, 0);
    curl_easy_cleanup(curl);
    }

    {
    ws.allow_ip("127.0.0.1");

    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_EQ(res, 0);
    LT_CHECK_EQ(s, "OK");
    }

    {
    ws.disallow_ip("127.0.0.1");

    curl_global_init(CURL_GLOBAL_ALL);
    std::string s;
    CURL *curl = curl_easy_init();
    CURLcode res;
    curl_easy_setopt(curl, CURLOPT_URL, "localhost:8080/base");
    curl_easy_setopt(curl, CURLOPT_HTTPGET, 1L);
    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);
    res = curl_easy_perform(curl);
    LT_ASSERT_NEQ(res, 0);
    curl_easy_cleanup(curl);
    }

    ws.stop();
LT_END_AUTO_TEST(reject_default_allow_passes)

LT_BEGIN_AUTO_TEST_ENV()
    AUTORUN_TESTS()
LT_END_AUTO_TEST_ENV()
