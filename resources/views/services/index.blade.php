@extends('layouts.app')



@section('content')

    <section class="container card">
        <div class="row">
            <div class="col-m d-flex justify-content-center align-item-center">
                <img class="img-fluid pl-3"src="{{asset('image\cosmetic-services.jpeg')}}" alt="">
            </div>
            <div class="container mt-4 p-2">
                <div class="row">
                    <div class="col-4">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Customer Service</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Contact Us</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Help Desk</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Return & Exchanges</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Order Status</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Feedback</a>
                      </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptates quisquam iusto aliquid optio? Sunt voluptates, esse explicabo beatae dolorum similique nesciunt dolore? Id, dignissimos voluptates. Incidunt delectus ipsum doloribus?</p>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odit unde voluptate cupiditate officiis, quaerat quia mollitia sapiente eaque corporis.</div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aspernatur nisi qui suscipit, maxime odit iusto sequi ipsa autem? Vitae voluptates atque necessitatibus.</div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nesciunt quas neque dolor consectetur velit corrupti totam laudantium quis quidem iusto, ducimus consequuntur aut iure porro adipisci veniam non natus vitae nisi a id fugit voluptatum dicta! Saepe corporis magnam consequatur! Ut quaerat hic corporis! Aperiam veritatis magnam sunt provident voluptatum alias maiores eos suscipit accusamus, odit optio earum, aut fugiat. A explicabo commodi maxime facere natus reprehenderit eos aliquid itaque assumenda, minus nesciunt tempora necessitatibus quas deserunt aut ipsam repellat sint dolores adipisci saepe. Esse debitis voluptates rerum vitae sapiente ipsa, consequatur obcaecati eaque, corporis autem tempora ullam laboriosam!</div>
                        </div>
                    </div>
            </div>
    </section>

    <section class="container card">
        <img src="{{asset('image\services_images.jpg')}}" alt="">
    </section>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('services.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

