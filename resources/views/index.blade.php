@extends('layout.app')

@section('content')
    <main>
        <section>
            <div class="row vh-100">
                <div class="col">
                    <h4>ArthoKu</h4>
                    <p>the best way to manage your money</p>
                    <button type="button" class="btn btn-primary">Let's Try</button>
                </div>
                <div class="col">
                    <img class="hero" src="{{ asset('assets/image/home.svg') }}" alt="ilustrasi orang">
                    <p>iki rencana ilustrasi</p>
                </div>
            </div>
        </section>

        <section>
            <div id="feature" class="container">
                <h1 class="text-center">Why ArthoKu?</h1>
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('assets/image/icon-feature-1.png') }}" alt="ilustrasi fitur" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/image/icon-feature-2.png') }}" alt="ilustrasi fitur" class="mx-auto" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/image/icon-feature-3.png') }}" alt="ilustrasi fitur" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                </div>
              </div>
        </section>

        <section>
            <div id="tips" class="container">
                <h1 class="text-center">Why ArthoKu?</h1>
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('assets/image/tips-1.svg') }}" alt="ilustrasi tips" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/image/tips-2.svg') }}" alt="ilustrasi tips" class="mx-auto" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/image/tips-3.svg') }}" alt="ilustrasi tips" style="max-width: 50%;">
                    <p>iki rencana ilustrasi</p>
                  </div>
                </div>
            </div>
        </section>

        <section>
            <div id="about" class="text-center">
                <h1>About</h1>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
            </div>
        </section>
    </main>
@endsection