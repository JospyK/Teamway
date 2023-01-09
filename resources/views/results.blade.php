@extends("layouts.front")


@section("content")
      <div class="container my-5 pb-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-0 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-0">
            <br>
            <h3 class="display-5 fw-bold lh-1 my-4 pt-5">Your results : You are an <span class="text-primary">Extrovert</span></h3>
            <p class="lead mt-3">
                An extrovert is a person who is outgoing and tends to gain energy from interacting with other people. They are often described as being energetic, confident, and sociable, and they tend to enjoy being around other people and participating in social activities. Extroverts are generally thought to be more talkative and expressive than introverts, and they may prefer activities that involve group participation or public speaking.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <a type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold my-3" href="#makeTest">READ MORE</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="img-fluid" width="500" src="/images/extrovert.jpg" alt="extrovert" />
          </div>
        </div>
      </div>

      <section class="container my-5">
        <div class="row">
            <div class="col-md-12 align-items-center rounded-3">
                <h2 id="makeTest" class="display-6 fw-bold lh-1 my-5 pt-3">Your results : You are an Extrovert or Introvert!</h2>
            </div>
            <div class="col-md-12">
                <div class="px-5 align-items-center rounded-3 border shadow-lg pb-4">
                    <img src="/images/Extrovert.jpg" class="img-fluid" alt="Extrovert">
                    <h3 id="makeTest" class="display-6 lh-1 my-3 pt-2">Extrovert</h3>
                    <p>An extrovert is a person who is outgoing and tends to gain energy from interacting with other people. They are often described as being energetic, confident, and sociable, and they tend to enjoy being around other people and participating in social activities. Extroverts are generally thought to be more talkative and expressive than introverts, and they may prefer activities that involve group participation or public speaking.</p>
                    </div>
            </div>
            <div class="col-md-12 my-4">
                <div class="px-5 align-items-center rounded-3 border shadow-lg pb-4">
                    <img src="/images/Introvert.jpg" class="img-fluid" alt="Introvert">
                    <h3 id="makeTest" class="display-6 lh-1 my-3 pt-2">Introvert</h3>
                    <p>An introvert is a person who tends to be more introspective and reflective, and who tends to draw energy from within themselves rather than from external sources. Introverts tend to be more reserved and introspective, and they often prefer solitude and quiet environments over social situations. They may have a smaller circle of close friends and prefer deeper, more meaningful relationships. Introverts also tend to be more sensitive to stimuli and may become easily overwhelmed in large, loud, or crowded environments.</p>
                </div>
            </div>
        </div>
      </section>


      <section class="container my-5 callToAction" >
        <div class="row my-5">
            <a href="/test" style="text-decoration: none;" class="col-md-12">
                <div class="text-white px-5 align-items-center rounded-3 border bg-primary shadow-lg pb-4">
                    <h3 id="makeTest" class="display-6 lh-1 my-3 pt-2">TAKE THE TEST AGAIN! </h3>
                    <p>Share it with your friends. Take the test together.</p>
                </div>
            </a>
        </div>
      </section>
@endsection

@section("page-script")

@endsection

