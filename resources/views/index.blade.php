@extends('layout.app')

@section('content')
    <main>
        <section class="hero-image mt-5 pt-5 vh-100" id="home">
          <div class="row mb-3">
              <div class="col d-flex justify-content-center align-items-center">
                <div class="content">
                  <h2 class="brand-arthoku">ArthoKu</h2>
                  <p class="slug-arthoku">the best way to manage your money</p>
                  <button type="button" class="btn btn-primary btn-Try px-4 d-flex ms-auto">Let's Try</button>
                </div>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <div class="img">
                  <img class="hero" src="{{ asset('assets/image/home.svg') }}" alt="ilustrasi orang">
                </div>
              </div>
          </div>
        </section>

        <section class="feature pt-5 vh-100" id="feature">
          <h1 class="text-center">Why ArthoKu?</h1>
          <p class="text-center mb-5">You can easily manage your money</p>
          <div class="row mb-3 p-5 box-feature">
            <div class="col">
              <div class="feature1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/icon-feature-1.png') }}" alt="ilustrasi fitur" style="max-width: 40%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">Easy to Operate</h3>
                <p class="text-center">It's simple to use for all ages</p>
              </div>
            </div>
            <div class="col">
              <div class="feature2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/icon-feature-2.png') }}" alt="ilustrasi fitur" class="mx-auto" style="max-width: 40%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">Better Future Plans</h3>
                <p class="text-center">With Monefy, You can plan your spending better</p>
              </div>
            </div>
            <div class="col">
              <div class="feature3 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/icon-feature-3.png') }}" alt="ilustrasi fitur" style="max-width: 40%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">Budget Recommendation</h3>
                <p class="text-center">we will give you some tips & recommendations for budgeting</p>
              </div>
            </div>
          </div>
        </section>

        <section class="tips pt-5 vh-100" id="tips">
          <h1 class="text-center">Tips</h1>
          <p class="text-center mb-5">The 50/30/20 Rule of Thumb for Budgeting</p>
          <div class="row mb-3 p-5 box-tips">
            <div class="col">
              <div class="feature1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/tips-1.svg') }}" alt="ilustrasi tips" style="max-width: 80%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">50% to Needs</h3>
                <p class="text-center">Needs are what you can’t live without, or at least very easily</p>
              </div>
            </div>
            <div class="col">
              <div class="feature1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/tips-2.svg') }}" alt="ilustrasi tips" style="max-width: 80%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">30% to Wants</h3>
                <p class="text-center">Wants are what you desire but don’t actually need to survive</p>
              </div>
            </div>
            <div class="col">
              <div class="feature1 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/tips-3.svg') }}" alt="ilustrasi tips" style="max-width: 80%;">
              </div>
              <div class="body-feature">
                <h3 class="text-center">20% to Financial Goals</h3>
                <p class="text-center">All savings, such as retirement contributions, saving for a house, and setting money</p>
              </div>
            </div>
          </div>
        </section>

        <section class="about mt-5 py-5" id="about">
          <div class="text-center">
            <h1>About</h1>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p>
          </div>
        </section>
    </main>
@endsection