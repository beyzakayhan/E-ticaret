@extends('yonetim.layouts.master');
@section('title', 'Kategori Yönetimi')
@section('content')

    <h1 class="page-header">Kategori Yönetimi</h1>

    <form method="post" action="{{route('yonetim.kategori.kaydet',@$entry->id)}}">
        {{csrf_field()}}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{@$entry->id>0 ? "Güncelle" :"Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">Kategori {{@$entry->id>0 ? "Düzenle" : "Ekle"}}</h2>

        @include('Layouts.partials.errors')
        @include('Layouts.partials.alert')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad</label>
                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad" value="{{ old('adsoyad', $entry->adsoyad) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email', $entry->email)}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sifre">Şifre</label>
                    <input type="password" class="form-control" name="sifre" id="sifre"  placeholder="Şifre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" name="adres" id="adres" placeholder="Adres" value="{{old('adres', $entry->detay->adres)}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" name="telefon" id=telefon placeholder="Telefon" value="{{old('telefon', $entry->detay->telefon)}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ceptelefonu">Cep Telefonu</label>
                    <input type="text" class="form-control" name="ceptelefonu" id="ceptelefonu" placeholder="Cep Telefonu" value="{{old('ceptelefonu', $entry->detay->ceptelefonu)}}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="aktif_mi" value="1"  {{old('aktif_mi', $entry->aktif_mi ? 'checked' : ' ')}}> Aktif mi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="yonetici_mi" value="1" {{old('yonetici_mi', $entry->yonetici_mi ? 'checked' : '')}}> Yönetici mi
            </label>
        </div>
    </form>
@endsection
