<?php

namespace Drupal\time_service\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\Core\Cache\CacheableResponseInterface;
use Drupal\Core\Cache\CacheableResponseTrait;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "time_service",
 *   label = @Translation("Time Service"),
 *   uri_paths = {
 *     "canonical" = "/time_service"
 *   }
 * )
 */
class TimeService extends ResourceBase implements CacheableResponseInterface {

    use CacheableResponseTrait;

    /**
     * Responds to entity GET requests.
     * @return \Drupal\rest\ResourceResponse
     */
    public function get() {
        $build =  [
            '#cache' => [
                'max-age' => 0,
            ]
        ];
        
        $message = [
            'time' => date("Y-m-d H:i:s"),
            'timezone' => date_default_timezone_get(),
        ];

        $response = new ResourceResponse($message);
        $response->addCacheableDependency($build);
        return $response;
    }
}