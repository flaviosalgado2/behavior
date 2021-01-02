<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return "<h1>Listagem do usuário com código 1</h1>";
    }

    public function getData()
    {
        return "<h1>Disparou ação de GET</h1>";
    }

    public function postData()
    {
        return "<h1>Disparou ação de POST</h1>";
    }

    public function testPut()
    {
        return "<h1>Disparou ação de PUT</h1>";
    }

    public function testPatch()
    {
        return "<h1>Disparou ação de Patch</h1>";
    }

    public function testMatch()
    {
        return "<h1>Disparou ação de MATCH</h1>";
    }

    public function ddestroy()
    {
        return "<h1>Disparou ação de DELETE</h1>";
    }

    //ANY ACEITA QUALQUER VERBO HTTP
    public function any()
    {
        return "<h1>Disparou ação de ANY</h1>";
    }
}
