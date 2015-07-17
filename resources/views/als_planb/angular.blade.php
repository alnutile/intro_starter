@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Angular!</h1>
    </div>


    <div class="container" ng-app="app">
        <div class="row">
            <div class="col-md-12" ng-controller="MainController as vm">



                <input class="form-control" name="search" ng-model="search" placeholder="Search">
                <ul>
                    <li ng-repeat="blog in vm.blogs | filter:search">
                        <a href="/blogs/@{{ blog.id }}">@{{ blog.title }}</a>
                    </li>
                </ul>


            </div>
        </div>
    </div>

@endsection

<!-- move into layout -->
{{--<script src="/js/angular.js"></script>--}}
{{--<script src="/js/app.js"></script>--}}