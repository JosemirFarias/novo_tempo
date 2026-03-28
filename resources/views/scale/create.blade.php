@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/scale.css') }}">
@endpush

@section('title', 'Gerenciar Escalas')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Gerenciar Escalas do Mês</h2>
            <button type="button" class="btn btn-primary" onclick="window.addTable()">
                <i class="bi bi-calendar-plus"></i> + Adicionar Data
            </button>
        </div>
        <hr class="main-divider">
        <br>

        <form action="{{ route('scale.store') }}" method="POST">
            @csrf
            {{-- Container onde as tabelas de cada data serão injetadas --}}
            <div id="scale-container">
            </div>

            <div class="text-center mt-5 mb-5">
                <button type="submit" class="btn btn-success btn-lg shadow">
                    <i class="bi bi-cloud-arrow-up"></i> Publicar Todas as Escalas
                </button>
            </div>
        </form>
    </div>

    {{-- Template da tabela por data --}}
    <template id="table-template">
        <div class="mb-5 scale-table-wrapper border p-3 rounded shadow-sm bg-white">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center gap-3">
                    <label class="fw-bold">Data da Escala:</label>
                    <input type="date" name="datas[]" class="form-control" style="width: auto;" required>
                </div>
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="window.removeTable(this)">
                    <i class="bi bi-trash"></i> Remover esta data
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 50px;">Sel.</th>
                            <th>Nome</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <input class="form-check-input user-checkbox" type="checkbox"
                                        value="{{ $user->id }}">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->function ?? 'Não definida' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </template>

    <script>
        window.tableIndex = 0;

        window.addTable = function() {
            const container = document.getElementById('scale-container');
            const template = document.getElementById('table-template');

            if (!container || !template) return;

            const clone = template.content.cloneNode(true);

            // Ajusta o name dos checkboxes para esta tabela específica
            const checkboxes = clone.querySelectorAll('.user-checkbox');
            checkboxes.forEach(input => {
                input.name = `equipe[${window.tableIndex}][]`;

                // Gera ID único para permitir clicar no nome e marcar o check
                const uniqueId = `check-${window.tableIndex}-${input.value}`;
                input.id = uniqueId;

                // Opcional: Se quiser que a linha inteira seja clicável, 
                // o label precisaria envolver o texto. Aqui vinculamos apenas ao ID.
                const tr = input.closest('tr');
                tr.onclick = function(e) {
                    if (e.target !== input) input.click();
                };
            });

            container.appendChild(clone);
            window.tableIndex++;
        }

        window.removeTable = function(button) {
            const wrapper = button.closest('.scale-table-wrapper');
            if (wrapper) {
                wrapper.remove();
            }
        }

        document.addEventListener('DOMContentLoaded', function() {

            for (let i = 0; i < 2; i++) {
                window.addTable();
            }
        });
    </script>
@endsection
