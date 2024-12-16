@extends('layouts.app')

@section('title', 'Tạo vấn đề mới')

@section('content')
<div class="container">
    <h1>Tạo vấn đề mới</h1>

    <form action="{{ route('issues.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="computer_id" class="form-label">Tên máy tính</label>
            <select name="computer_id" id="computer_id" class="form-control">
                @foreach ($computers as $computer)
                <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Tên phiên bản</label>
            <select name="model" id="model" class="form-control">
                @foreach ($computers as $computer)
                <option value="{{ $computer->id }}">{{ $computer->model }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo sự cố</label>
            <input type="text" name="reported_by" id="reported_by" class="form-control">
        </div>

        <div class="mb-3">
            <label for="reported_date" class="form-label">Thời gian báo cáo</label>
            <input type="date" name="reported_date" id="reported_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description">Mô tả:</label>
            <textarea name="description" required></textarea><br>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ sự cố</label>
            <select name="urgency" id="urgency" class="form-control">
                @foreach ($issues as $issue)
                <option value="{{ $issue->urgency }}">{{ $issue->urgency }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái hiện tại</label>
            <select name="status" id="status" class="form-control">
                @foreach ($issues as $issue)
                <option value="{{ $issue->status }}">{{ $issue->status }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('issues.index') }}" class="btn btn-info">
            Quay lại danh sách
        </a>
    </form>
</div>
@endsection