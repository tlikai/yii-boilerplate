<?php

class SiteController extends ApiController
{
    public function actionIndex()
    {
        Response::make('That\'s it!');
    }
}
