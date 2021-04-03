<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Update</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    {{-- font-awesome --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section style="padding-top: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-6" style="margin: auto;">
                    <div class="card" style="border-color: #f0ad4e">
                        <div class="card-header">
                            Contact List
                        </div>
                        <div class="card-body">

                            {{-- flash message --}}
                            @include('flash-message')
                            
                            <div class="col" style="text-align:right">
                                <a href="{{ url('/data-list') }}"><button class="btn btn-warning"><i
                                            class="fa fa-list"></i> List</button></a><br><br>
                            </div>
                            <div class="col">
                                <form action="{{ url('update_data/' . $item->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter name here" value="{{ $item->name}}" />
                                        <span style="color: red">@error('name'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email <span style="color: red">*</span></label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email id here" value="{{ $item->email}}" />
                                            <span style="color: red">@error('email'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address <span style="color: red">*</span></label>
                                                <textarea name="address" class="form-control" placeholder="Enter address here">{{ $item->address}}</textarea>
                                                <span style="color: red">@error('address'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobile">Mobile No <span style="color: red">*</span></label>
                                                    <input type="number" name="mobile" class="form-control"
                                                        placeholder="Enter mobile no here" value="{{ $item->mobile}}" />
                                                    <span style="color: red">@error('mobile'){{ $message }}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comments">Comments</label>
                                                        <textarea name="comments" class="form-control" placeholder="Enter comments here (optional)">{{ $item->comments}}</textarea>
                                                        <span style="color: red">@error('comments'){{ $message }}@enderror</span>
                                                        </div>
                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </body>

                    </html>
