@extends("layouts.front")


@section("content")
      <div class="container my-5 pb-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-0 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-0">
            <br>
            <h3 class="display-5 fw-bold lh-1 my-4 pt-5">Your results : {{ $test->name ?? ''}} you are an <span class="text-primary">{{$result}}!</span></h3>
            <p class="lead mt-3">
                @if ($result == "Extrovert")
                An extrovert is a person who is outgoing and tends to gain energy from interacting with other people. They are often described as being energetic, confident, and sociable, and they tend to enjoy being around other people and participating in social activities. Extroverts are generally thought to be more talkative and expressive than introverts, and they may prefer activities that involve group participation or public speaking.
                @else
                An introvert is a person who tends to be more introspective and reflective, and who tends to draw energy from within themselves rather than from external sources. Introverts tend to be more reserved and introspective, and they often prefer solitude and quiet environments over social situations. They may have a smaller circle of close friends and prefer deeper, more meaningful relationships.
                @endif
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <a type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold my-3" href="#readmore">READ MORE</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="img-fluid" width="500" src="/images/{{$result}}.jpg" alt="extrovert" />
          </div>
        </div>
      </div>

      <section class="container my-5">
        <div class="row">
            <div class="col-md-12 align-items-center rounded-3">
                <h2 id="readmore" class="display-6 fw-bold lh-1 my-5 pt-3">What is an <span class="text-primary">{{$result}}</span>?</h2>
            </div>
            <div class="col-md-12">
                <div class="px-5 align-items-center rounded-3 border shadow-lg pb-4">
                    @if ($result == "Extrovert")
                    <img src="/images/Extrovert.jpg" class="img-fluid" alt="Extrovert">
                    <h3 id="extrovert" class="display-6 lh-1 my-3 pt-2">Extrovert</h3>
                    <p>An extrovert is a person who is outgoing and tends to gain energy from interacting with other people. They are often described as being energetic, confident, and sociable, and they tend to enjoy being around other people and participating in social activities. Extroverts are generally thought to be more talkative and expressive than introverts, and they may prefer activities that involve group participation or public speaking.</p>
                    <h4 class="display-8 lh-1 my-3 pt-2">Characteristics of an extrovert</h4>
                    <ul>
                        Some characteristics of an extrovert include:
                        <li>You enjoy working in a group.</li>
                        <li>You’re always up to try new things.</li>
                        <li>You can be impulsive.</li>
                        <li>You like to talk through problems.</li>
                        <li>You make friends easily.</li>
                    </ul>

                    @else
                    <img src="/images/Introvert.jpg" class="img-fluid" alt="Introvert">
                    <h3 id="introvert" class="display-6 lh-1 my-3 pt-2">Introvert</h3>
                    <p>An introvert is a person who tends to be more introspective and reflective, and who tends to draw energy from within themselves rather than from external sources. Introverts tend to be more reserved and introspective, and they often prefer solitude and quiet environments over social situations. They may have a smaller circle of close friends and prefer deeper, more meaningful relationships. Introverts also tend to be more sensitive to stimuli and may become easily overwhelmed in large, loud, or crowded environments.</p>

                    <h4 class="display-8 lh-1 my-3 pt-2">Characteristics of an introvert</h4>
                    <ul>
                        Some characteristics of an introvert include:
                        <li>You’re a natural listener.</li>
                        <li>You enjoy alone time.</li>
                        <li>You avoid conflict.</li>
                        <li>You consider things carefully.</li>
                        <li>You’re creative.</li>
                    </ul>



                    @endif

                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="px-5 align-items-center rounded-3 border shadow-lg pb-4">
                    <h4 id="general" class="display-6 lh-1 my-3 pt-2">Can your results change over time?</h4>
                    <p>

                    <p>Yes, if you work at it.</p>

                    <p>“There are positive qualities that come along with both introverts and extroverts, as well as drawbacks,” states Dr. Tworek.</p>

                    <p>For example, if you tend to blurt out your opinion before getting a chance to think about it or you rarely speak up with your opinion, you can work on changing how you respond.</p>

                    <p>“If you typically speak up quickly, take a few moments to formulate your opinion in your head before saying it aloud in a meeting,” advises Dr. Tworek. “And if you’re more likely to stay quiet, try writing down your thoughts in a notebook and then saying it out loud to those around you.”</p>

                    <p>If you’re not that outgoing in social settings, work on making small talk. Or if you’re always on the go, try to spend an afternoon reading a book and recharging.</p>

                    <p>Even practicing meditation can help whether you view yourself as an introvert or extrovert. Those moments of silence can lead to reflection and a deeper awareness and even help you learn tools to combat anxiety in social settings.</p>

                    <p>“It’s all about bringing awareness to those certain traits that you want to change,” says Dr. Tworek. “We can actively work on the positive traits of each personality type to bring out the best of both worlds.”</p>
                    </p>

                    <p class="text-end"><a href="https://health.clevelandclinic.org/introvert-vs-extrovert/" target="_blank"> <small>Credits to: https://health.clevelandclinic.org/introvert-vs-extrovert/</small></a></p>

                </div>
            </div>
        </div>
      </section>


      <section class="container my-5 callToAction" >
        <div class="row my-5">
            <a href="/test" style="text-decoration: none;" class="col-md-12">
                <div class="text-white px-5 align-items-center rounded-3 border bg-primary shadow-lg pb-4">
                    <h3 id="readmore" class="display-6 lh-1 my-3 pt-2">TAKE THE TEST AGAIN! </h3>
                    <p>Share it with your friends. Take the test together.</p>
                </div>
            </a>
        </div>
      </section>
@endsection

@section("page-script")

@endsection

