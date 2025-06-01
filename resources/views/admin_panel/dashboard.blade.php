@extends('admin_panel.layouts.master')


@if (auth()->user()->hasAnyRole(['super-admin', 'admin']))
    @include('admin_panel.dash1')
@else
    @include('admin_panel.dash2')
@endif







