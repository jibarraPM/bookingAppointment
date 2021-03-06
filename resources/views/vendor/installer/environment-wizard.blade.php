@extends('vendor.installer.layouts.master')

@section('template_title')
    Database Configuration
@endsection

@section('title')
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
    Database Configuration
@endsection

@section('container')

    <form method="post" action="{{ route('LaravelInstaller::environmentSaveWizard') }}" class="tabs-wrap">
        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('database_hostname') ? ' has-error ' : '' }}">
            <label for="database_hostname">
                {{ trans('installer_messages.environment.wizard.form.db_host_label') }}
            </label>
            <input type="text" name="database_hostname" id="database_hostname" value="{{old('database_hostname')}}"
                   placeholder="{{ trans('installer_messages.environment.wizard.form.db_host_placeholder') }}"/>
            @if ($errors->has('database_hostname'))
                <span class="error-block">
                            {{ $errors->first('database_hostname') }}
                        </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('database_port') ? ' has-error ' : '' }}">
            <label for="database_port">
                {{ trans('installer_messages.environment.wizard.form.db_port_label') }}
            </label>
            <input type="number" name="database_port" id="database_port" value="3306"
                   placeholder="{{ trans('installer_messages.environment.wizard.form.db_port_placeholder') }}"/>
            @if ($errors->has('database_port'))
                <span class="error-block">
                            {{ $errors->first('database_port') }}
                        </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('database_name') ? ' has-error ' : '' }}">
            <label for="database_name">
                {{ trans('installer_messages.environment.wizard.form.db_name_label') }}
            </label>
            <input type="text" name="database_name" id="database_name" value="{{ old('database_name') }}"
                   placeholder="{{ trans('installer_messages.environment.wizard.form.db_name_placeholder') }}"/>
            @if ($errors->has('database_name'))
                <span class="error-block">
                            {{ $errors->first('database_name') }}
                        </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('database_username') ? ' has-error ' : '' }}">
            <label for="database_username">
                {{ trans('installer_messages.environment.wizard.form.db_username_label') }}
            </label>
            <input type="text" name="database_username" id="database_username" value="{{ old('database_username') }}"
                   placeholder="{{ trans('installer_messages.environment.wizard.form.db_username_placeholder') }}"/>
            @if ($errors->has('database_username'))
                <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                    {{ $errors->first('database_username') }}
                        </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('database_password') ? ' has-error ' : '' }}">
            <label for="database_password">
                {{ trans('installer_messages.environment.wizard.form.db_password_label') }}
            </label>
            <input type="password" name="database_password" id="database_password"
                   value="{{ old('database_password') }}"
                   placeholder="{{ trans('installer_messages.environment.wizard.form.db_password_placeholder') }}"/>
            @if ($errors->has('database_password'))
                <span class="error-block">
                            {{ $errors->first('database_password') }}
                        </span>
            @endif
        </div>

        <div class="buttons">
            <button class="button" type="submit">
                <i class="fa fa-check fa-fw" aria-hidden="true"></i>
                {!! trans('installer_messages.install_now') !!}
                <i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i>
            </button>
        </div>

    </form>
@endsection
