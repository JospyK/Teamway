@extends("layouts.front")


@section("content")

      <div class="container my-5 pb-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-0 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-12 p-3 p-lg-5 pt-lg-0">
            <div>
                <h3 class="display-5 fw-bold lh-1 my-4 pt-5">Question here</h3>

                Answer here
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-between mb-4 mb-lg-3">
                <a type="button" class="btn btn-secondary btn-lg px-4 me-md-2 fw-bold my-3" href="#makeTest">PREVIOUS</a>
                <a type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold my-3" href="#makeTest">NEXT</a>
            </div>
          </div>
        </div>
      </div>

@endsection

@section("page-script")

@endsection

