@extends('layouts.master')

@section('header.title')
Article details
@stop

@section('body.content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa fa-bars"></i>Articles</h3>
            </div>
        </div>
        <section class="panel">
            <header class="panel-heading">
                Article details
            </header>
            <div class="panel-body">
                <form class="form-horizontal " method="get">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $article->title }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">{{ $article->content }}</p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-default" href="/articles" title="Back to list">
                    <span class="arrow_back"></span> Back
                </a>
            </div>
        </div>
    </section>
</section>
@stop