@extends("layouts.front")


@section("content")

        <style>
            label {
                width: 100%;
                font-size: 1rem;
            }

            .card-input-element+.card {
                height: calc(36px + 2*1rem);
                border: 2px solid transparent;
                border-radius: 3px;
            }

            .card-input-element+.card:hover {
                cursor: pointer;
            }

            .card-input-element:checked+.card {
            border: 2px solid #0d6efd;
            -webkit-transition: border .3s;
            -o-transition: border .3s;
            transition: border .3s;
            }

            .card-input-element:checked+.card::after {
            content: '\e5ca';
            color: #ff0000;
            font-size: 24px;
            -webkit-animation-name: fadeInCheckbox;
            animation-name: fadeInCheckbox;
            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
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


        </style>

      <div class="container my-5 pb-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-0 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-12 p-3 p-lg-5 pt-lg-0">
            <div>
                <h3 class="display-5 fw-bold lh-1 my-5">Question here</h3>

                <div>

                    <label>
                        <input type="radio" name="demo" class="card-input-element d-none" id="demo1">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                        Answer 1
                        </div>
                    </label>

                    <label class="mt-3">
                        <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                        Answer 2
                        </div>
                    </label>

                    <label>
                        <input type="radio" name="demo" class="card-input-element d-none" id="demo1">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                        Answer 1
                        </div>
                    </label>

                    <label class="mt-3">
                        <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                        Answer 2
                        </div>
                    </label>

                </div>
            </div>
            <div class="d-grid gap-1 d-md-flex justify-content-between my-4 mb-lg-2">
                <a type="button" class="btn btn-secondary btn-md px-4 fw-bold my-3" href="#previous">PREVIOUS</a>
                <a type="button" class="btn btn-primary btn-md px-4 fw-bold my-3" href="#next">NEXT</a>
            </div>
          </div>
        </div>
      </div>

@endsection

@section("page-script")

@endsection

