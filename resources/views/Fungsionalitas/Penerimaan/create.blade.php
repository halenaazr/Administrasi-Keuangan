@extends("layout.app")

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading bg-blue"><b>Create Penerimaan</b></div>
                    <div class="panel-body">
                        <div class="box-body">
                            <form action="{{url('penerimaan/')}}" method="POST">
                                {{csrf_field()}}
                                <label for="profit">Profit:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-dollar"></i>
                                    </span>
                                    <input type="text" name="profit" id="profit" class="form-control" placeholder="Profit...">
                                </div>
                                <div class="form-group">
                                    <label for="bulan">Bulan:</label>
                                    <input type="text" name="bulan" id="bulan" class="form-control" placeholder="Ex: Mei ...">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun:</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Ex: 2017 ...">
                                </div>
                                <label for="keterangan">Keterangan:</label>
                                <div class="form-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-align-justify"></i>
                                    </span>
                                    <textarea rows="10"  name="keterangan" id="keterangan" class="form-control" placeholder="Type Here..."></textarea>
                                </div>
                                <input type="submit" class="bg-blue btn pull-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

