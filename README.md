## Time service Drupal Rest API resource

Was coded as an exercise [in response to this question in stackexchange ](https://drupal.stackexchange.com/questions/276913/how-to-get-time-from-drupal-by-rest-get-http).

## How to use
- enable the module 
- vitit `/time_service` you should get a response like
 ```
 {
    time: "2019-02-25 10:25:21",
    timezene: "Europe/Athens"
}
 ```

## More information
- [Custom rest resource](https://www.drupal.org/docs/8/api/restful-web-services-api/custom-rest-resources)
- [Rest GET without caching](https://drupal.stackexchange.com/questions/182863/rest-get-without-caching)