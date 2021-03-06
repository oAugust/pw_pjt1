                                                                                  ?U??<??=???=???=???=???=???=???=???=???=???>???>???>???>???>???>???>???>???=???<???;~??9|??7y??4v?????????????????????????????????????????????????????????????????????????????????????????????????                            ?\?!?Z???[???[???[???Z???Z???U?	                                                                                                                                    ?L
?=??=???=???=???=???=???=???>???=???>???>???>???>???>???>???>???>???=???<???:~??9|??7y??4v?????????????????????????????????????????????????????????????????????????????????????????????????                                    ?]??Y?G?Z?W?Z?-?U?                                                                                                                                            ?<x?<?;=???=???=???=???>???>???>???>???>???>???>???>???>???>???>???=???=???;~??9|??7y??4v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                        ?:?=?׾>???=???=???=???>???>???>???>???>???>???>???>???????>???=???<???;??:|??7y??5v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                            ?? ?=???>???>???>???>???>???>???>???>???>???>???>???>???>???=???=???;~??:|??7z??5v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                ?=?:?=???>???>???>???>???>???>???>???>???>???>???????>???=???=???;??9|??8z??4v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                    ?<???=???>???>???>???>???>???>???????????>???????>???=???=???;??9|??7z??5v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                        ?>?Z?>???>???>???>???>???>???>???>???>???????>???>???=???;??:}??7z??5v?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                        ? ??=?p?>???>???>???????>???>???????????????>???>???=???;???:}??7z??5w?????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                            ?U??=???>???>???>???????????????????????????>???=???<???9}??7z??5w????????????????????????????????????????????????????????????????????????????????????????????????                                                                                                                                                                                                                                    ?>???>???????>???????????????????????>???=???<???9}??8z??5w??????????????????????????????????????????????????????????????????????????? *
     * @return HTTPException
     */
    public static function forInvalidFile(?string $path = null)
    {
        return new static(lang('HTTP.invalidFile'));
    }

    /**
     * For Uploaded file move
     *
     * @return HTTPException
     */
    public static function forMoveFailed(string $source, string $target, string $error)
    {
        return new static(lang('HTTP.moveFailed', [$source, $target, $error]));
    }

    /**
     * For Invalid SameSite attribute setting
     *
     * @return HTTPException
     *
     * @deprecated Use `CookieException::forInvalidSameSite()` instead.
     *
     * @codeCoverageIgnore
     */
    public static function forInvalidSameSiteSetting(string $samesite)
    {
        return new static(lang('Security.invalidSameSiteSetting', [$samesite]));
    }
}
