<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/step_7_8.css">


    <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/BrightTheme.css" rel="stylesheet">

</head>

<body>
    <!-- Geri Tuşu ve Logo -->
    <div class="header d-flex align-items-center w-100 mb-4">
        <button class="back-button btn p-0 me-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
        <h2>Logo</h2>
    </div>
    <div class="steps d-flex justify-content-center mb-4">
        <span class="step-circle1"></span>
        <span class="step-circle2"></span>
        <span class="step-circle3"></span>
        <span class="step-circle4"></span>
        <span class="step-circle"></span>
    </div>
    <div class="container d-flex flex-column align-items-center mt-5" style="max-width: 600px;">
        <div class="border p-3 my-3 w-100">
            <div class="d-flex justify-content-between align-items-center">
                <span>Seçilen Kategori</span>
                <a href="{{route('listings.create', [2])}}" class="text-primary">Değiştir</a>
            </div>
            <div class="mt-2">
                <strong>{{$subCategory->name}}</strong>
            </div>
        </div>
        <!-- Model Başlığı -->
        @foreach($categoryParameters as $categoryParam)
        @php
        $paramValues = explode(',', $categoryParam->parameter_values);

        @endphp
        <div class="mb-3 w-100">
            <label for="model" class="form-label">{{$categoryParam->parameter_name}}</label>
            <div class="input-group">
                <input type="text" id="{{$categoryParam->parameter_name}}-sec" class="form-control"
                    placeholder="Seçiniz.." readonly data-bs-toggle="modal"
                    data-bs-target="#{{$categoryParam->parameter_name}}Modal"
                    data-name="{{$categoryParam->parameter_name}}"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal"
                    data-bs-target="#{{$categoryParam->parameter_name}}Modal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>

        </div>
        <div class="modal fade" id="{{$categoryParam->parameter_name}}Modal" tabindex="-1" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="renkModalLabel">{{$categoryParam->parameter_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group" id="renkList">
                            @foreach($paramValues as $paramValue)
                            <li class="list-group-item"
                                onclick="chooseOption('{{$categoryParam->parameter_name}}','{{$paramValue}}')">
                                {{$paramValue}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($subCategoryParameters as $subCategoryParam)
        @php
        $paramValues = explode(',', $subCategoryParam->parameter_value);
        debugbar()->info($subCategoryParam->parameter_values);
        @endphp
        <div class="mb-3 w-100">
            <label for="model" class="form-label">{{$subCategoryParam->parameter_name}}</label>
            <div class="input-group">
                <input type="text" id="param_{{$subCategoryParam->id}}-sec" class="form-control" placeholder="Seçiniz.."
                    readonly data-bs-toggle="modal" data-bs-target="#param_{{$subCategoryParam->id}}Modal"
                    data-name="{{$subCategoryParam->parameter_name}}"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal"
                    data-bs-target="#param_{{$subCategoryParam->id}}Modal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>

        </div>
        <div class="modal fade" id="param_{{$subCategoryParam->id}}Modal" tabindex="-1" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="renkModalLabel">{{$subCategoryParam->parameter_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group" id="renkList">
                            @foreach($paramValues as $paramValue)
                            <li class="list-group-item"
                                onclick="chooseOption('{{$subCategoryParam->id}}','{{$paramValue}}')">
                                {{$paramValue}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if(count(array_diff($subCategoryParameters, $subSubCategoryParameters)) > 0)
        @foreach($subSubCategoryParameters as $subCategoryParam)
        @php
        $paramValues = explode(',', $subCategoryParam->parameter_value);
        debugbar()->info($subCategoryParam->parameter_values);
        @endphp
        <div class="mb-3 w-100">
            <label for="model" class="form-label">{{$subCategoryParam->parameter_name}}</label>
            <div class="input-group">
                <input type="text" id="param_{{$subCategoryParam->id}}-sec" class="form-control" placeholder="Seçiniz.."
                    readonly data-bs-toggle="modal" data-bs-target="#param_{{$subCategoryParam->id}}Modal"
                    data-name="{{$subCategoryParam->parameter_name}}"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal"
                    data-bs-target="#param_{{$subCategoryParam->id}}Modal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>

        </div>
        <div class="modal fade" id="param_{{$subCategoryParam->id}}Modal" tabindex="-1" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="renkModalLabel">{{$subCategoryParam->parameter_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group" id="renkList">
                            @foreach($paramValues as $paramValue)
                            <li class="list-group-item"
                                onclick="chooseOption('{{$subCategoryParam->id}}','{{$paramValue}}')">
                                {{$paramValue}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        @foreach($generalParameters as $generalParam)
        @php
        $paramValues = explode(',', $generalParam->parameter_value);
        debugbar()->info($generalParam->parameter_values);
        @endphp
        <div class="mb-3 w-100">
            <label for="model" class="form-label">{{$generalParam->parameter_name}}</label>
            <div class="input-group">
                <input type="text" id="param_{{$generalParam->id}}-sec" class="form-control" placeholder="Seçiniz.."
                    readonly data-bs-toggle="modal" data-bs-target="#param_{{$generalParam->id}}Modal"
                    data-name="{{$generalParam->parameter_name}}"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#param_{{$generalParam->id}}Modal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>

        </div>
        <div class="modal fade" id="param_{{$generalParam->id}}Modal" tabindex="-1" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="renkModalLabel">{{$generalParam->parameter_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group" id="renkList">
                            @foreach($paramValues as $paramValue)
                            <li class="list-group-item"
                                onclick="chooseOption('{{$generalParam->id}}','{{$paramValue}}')">
                                {{$paramValue}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Devam Et Butonu -->
    <div class="text-center mt-5">
        <button class="btn btn-outline-custom mt-5 w-25" id="next_step">Devam Et</button>
    </div>

    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

    @if($errors->any())
    <script>
        $(document).ready(() => {
            PNotify.error({
                text: '{{$errors->first()}}',
                delay: 2000
            })
        });
    </script>
    @endif

    <script>

        let chooseOption = (parameterName, value) => {
            console.log(parameterName, value);
            document.getElementById("param_" + parameterName + '-sec').value = value;
            let modal = bootstrap.Modal.getInstance(document.getElementById("param_" + parameterName + 'Modal'));
            modal.hide();
        }

        document.getElementById('next_step').addEventListener('click', function () {
            window.parameters = [];
            // get all inputs that id starts with param_
            let inputs = document.querySelectorAll('input[id^="param_"]');
            let run = false;

            for (let i = 0; i < inputs.length; i++) {

                let parameterId = inputs[i].id.split('-')[0].replace('param_', '');
                let parameterName = inputs[i].getAttribute('data-name');
                let parameterValue = inputs[i].value;
                if (parameterValue == '') {
                    alert('Lütfen tüm alanları doldurunuz');
                    console.log(`Parameter ${parameterName} is empty`);
                    run = false;
                    break;
                    return;
                }
                window.parameters.push({
                    parameter_id: parameterId,
                    parameter_name: parameterName,
                    parameter_value: parameterValue
                });
                run = true;
            }
            if (run) {
                $.ajax({
                    url: '/api/create-listing/step-5',

                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        parameters: window.parameters
                    },
                    success: (data) => {
                        window.location.href = '/ilan-yukle/6';
                        console.log(data);
                    }
                })

            }
        });
    </script>

</body>

</html>