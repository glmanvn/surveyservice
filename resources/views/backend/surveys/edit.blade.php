@extends('layouts.master')

@section('header.title') <?php echo Lang::get('title_master.page_survey'); ?> @stop
@section('header.page_title') <?php echo Lang::get('title_master.page_survey'); ?> @stop

@section('body.content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo Lang::get('title_master.surveys_edit_top'); ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! Form::open([
                                'route' => 'backend_surveys.store',
                                'method' => 'POST',
                                'class' => 'form-horizontal form-label-left'
                            ])
                        !!}
                            {!! Form::hidden('id', $survey->id, ['class' => 'form-control']) !!}
                            
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.survey_title'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.survey_start_date'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    {!! Form::text('start_date', @$survey->start_date, ['id' => 'start_date', 'class' => 'form-control has-feedback-left active']) !!}
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.survey_end_date'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    {!! Form::text('end_date', @$survey->end_date, ['id' => 'end_date', 'class' => 'form-control has-feedback-left active']) !!}
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.survey_content'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    {!! Form::text('content', $survey->content, ['id' => 'content']) !!}
                                </div>
                            </div>
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <a href="{{ route('backend_surveys.index') }}" class="btn btn-primary">
                                        <?php echo Lang::get('title.action_back'); ?>
                                    </a>
                                    <button type="button" class="btn btn-danger">
                                        <?php echo Lang::get('title.action_delete'); ?>
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <?php echo Lang::get('title.action_save'); ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('body.js')
    <!-- daterangepicker -->
    <script type="text/javascript" src="/js/moment/moment.min.js"></script>
    <script type="text/javascript" src="/js/datepicker/daterangepicker.js"></script>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'content', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#start_date').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_2",
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            
            $('#end_date').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_2",
                format: 'MM/DD/YYYY',
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
@stop