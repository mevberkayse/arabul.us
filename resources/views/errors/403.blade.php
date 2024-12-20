@extends('errors::minimal')

@section('title', __('Yasak'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Bu sayfaya erişim izniniz yok!'))
