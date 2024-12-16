@extends('layouts.app')

@section('title', 'Cập nhật vấn đề')

@section('content')

<h1>Cập nhật vấn đề</h1>

<form action="{{ route('issues.update', $issue->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="computer_id">Tên máy tính:</label>
        <select name="computer_id" class="form-control" required>
            @foreach($computers as $computer)
            <option value="{{ $computer->id }}" {{ $issue->computer_id == $computer->id ? 'selected' : '' }}>
                {{ $computer->computer_name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="model" class="form-label">Tên phiên bản</label>
        <select name="model" id="model" class="form-control">
            @foreach ($computers as $computer)
            <option value="{{ $computer->id }}" {{ $issue->computer_id == $computer->id ? 'selected' : '' }}>
                {{ $computer->model }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="reported_by">Người báo cáo sự cố:</label>
        <input type="text" name="reported_by" class="form-control" value="{{ $issue->reported_by }}">
    </div>

    <div class="form-group">
        <label for="reported_date">Thời gian báo cáo:</label>
        <input type="datetime-local" name="reported_date" class="form-control"
            value="{{ date('Y-m-d\TH:i', strtotime($issue->reported_date)) }}" required>
    </div>

    <div class="form-group">
        <label for="description">Mô tả vấn đề:</label>
        <textarea name="description" class="form-control" required>{{ $issue->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="urgency">Mức độ sự cố:</label>
        <select name="urgency" class="form-control" required>
            <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Low</option>
            <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>High</option>
        </select>
    </div>

    <div class="form-group">
        <label for="status">Trạng thái sự cố:</label>
        <select name="status" class="form-control" required>
            <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Open</option>
            <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
            <option value="Resolved" {{ $issue->status == 'Resolved' ? 'selected' : '' }}>Resolved</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('issues.index') }}" class="btn btn-info">Quay lại danh sách</a>
</form>

@endsection