@extends("layouts.front")


@section("styles")

    <style>
        label {
            width: 100%;
            font-size: 1rem;
        }

        .card-input-element+.card {
            border: 2px solid transparent;
            border-radius: 3px;
        }

        .card-input-element+.card:hover {
            border: 2px solid #86b4fa;
            cursor: pointer;
        }

        .card-input-element:checked+.card {
        border: 2px solid #0d6efd;
        -webkit-transition: border .3s;
        -o-transition: border .3s;
        transition: border .3s;
        }

        .unchecked+.card {
            border: 2px solid #fd0d35;
            -webkit-transition: border .3s;
            -o-transition: border .3s;
            transition: border .3s;
        }

        @-webkit-keyframes fadeInCheckbox {
        from {
            opacity: 0;
            -webkit-transform: rotateZ(-20deg);
        }
        to {
            opacity: 1;
            -webkit-transform: rotateZ(0deg);
        }
        }

        @keyframes fadeInCheckbox {
        from {
            opacity: 0;
            transform: rotateZ(-20deg);
        }
        to {
            opacity: 1;
            transform: rotateZ(0deg);
        }
        }




        /* Mark input boxes that gets an error on validation: */
        input.invalid {
        background-color: #ffdddd;
        }

        .tab {
        display: none;
        }

    </style>

@endsection


@section('content')



      <div class="container my-5 pb-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-0 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-12 p-3 p-lg-5 pt-lg-0">
            <form id="regForm" action="{{ route('test.process')}}" method="POST">
                @csrf
                @foreach ($questions as $key => $question)
                <div class="tab">
                    <h5 class="display-7 fw-bold lh-1 my-4"> <span class="badge bg-primary"> {{$key +1}} / {{$questions->count()}}</span> - {{$question->name}}</h5>
                        @foreach ($question->answers as $answer)
                        <label class="my-1">
                            <input type="radio" required name="{{$question->id}}" class="card-input-element d-none" id="demo1" value="{{$answer->id}}">
                            <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center box{{$key}}" >
                                {{$answer->name}}
                            </div>
                        </label>
                        @endforeach
                </div>
                @endforeach
                <div class="tab">
                    <h5 class="display-7 fw-bold lh-1 my-4"> <span class="badge bg-primary"> Complete </span> - Enter your name to save your result:</h5>

                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6 col-lg-4">
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" value="">
                            </div>
                          </div>
                </div>
                <div class="d-grid gap-1 d-md-flex justify-content-end my-4 mb-lg-2">
                    <button type="button" class="btn btn-secondary btn-md px-4 fw-bold my-3 mx-2" id="prevBtn" onclick="nextPrev(-1)">PREVIOUS</button>
                    <button type="button" class="btn btn-primary btn-md px-4 fw-bold my-3" id="nextBtn" onclick="nextPrev(1)">NEXT</button>
                </div>
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

            </form>

          </div>
        </div>
      </div>

@endsection

@section("page-script")
<script src="/js/main.js"></script>
@endsection

