@extends('layouts.master')

@section('header.title')
List of articles
@stop

@section('body.content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa fa-bars"></i>Articles</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                    <header class="panel-heading">
                        List of articles
                    </header>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}
                                </td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <a href="#"> edit </a> &nbsp;|&nbsp;
                                    <a href="#"> delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
                
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-default" href="/article/edit" title="Back to list">
                            <span class="arrow_back"></span> Regist
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</section>
@stop