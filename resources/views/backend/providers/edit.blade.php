@extends('layouts.master')

@section('header.title') <?php echo Lang::get('title_master.page_provider'); ?> @stop
@section('header.page_title') <?php echo Lang::get('title_master.page_provider'); ?> @stop

@section('body.content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo Lang::get('title_master.providers_show_top'); ?></h2>
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
                                'route' => 'backend_provider.store',
                                'method' => 'POST',
                                'class' => 'form-horizontal form-label-left'
                            ])
                        !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" id="provider_id" value="{{ $provider->id }}" />
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_name'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <!--<input type="text" name="name" class="form-control" value="{{ $provider->name }}" required />-->
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_short_name'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="short_name" class="form-control" value="{{ $provider->short_name }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_brand_name'); ?>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="brand_name" class="form-control" value="{{ $provider->brand_name }}" required>
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_status'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly" value="{{ Lang::get('title.provider_statuses.' . $provider->status) }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_website'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="website" class="form-control" value="{{ $provider->website }}">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_email'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="email" class="form-control" value="{{ $provider->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_tel'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $provider->tel }}">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_fax'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $provider->fax }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_address'); ?>
                                </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $provider->address }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_token_key'); ?>
                                </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" class="form-control danger" readonly="readonly" value="{{ $provider->token_key }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_created_at'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly" value="{{ $provider->created_at != null ? $provider->created_at->format('Y/m/d') : '-' }}">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                                    <?php echo Lang::get('title_master.providers_updated_at'); ?>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly" value="{{ $provider->updated_at != null ? $provider->updated_at->format('Y/m/d') : '-' }}">
                                </div>
                            </div>
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <a href="{{ route('backend_provider.index') }}" class="btn btn-primary">
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