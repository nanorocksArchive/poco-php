<?php

namespace App\Validator;

class UrlValidation {

    /**
     * @param string $url
     * @return array
     */
    public function check(string $url): array
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return [
                'valid' => true,
                'msg' => "This is a valid URL"
            ];
        }
        return [
            'valid' => false,
            'msg' => "This is not a valid URL. Url must start with http or https."
        ];
    }
}