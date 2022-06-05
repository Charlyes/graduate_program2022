        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="pt-5 pb-5 sidebar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('img/FAMS.svg') }}">
                </div>
                <div class="sidebar-brand-text mx-3">FAMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Painel de Controle</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @if (auth()->user()->can('role-list') ||
    auth()->user()->can('user-list'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Configuração</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gerir:</h6>
                            @can('role-list')
                                <a class="collapse-item" href="{{ route('roles.index') }}">Grupos</a>
                            @endcan
                            @can('user-list')
                                <a class="collapse-item" href="{{ route('users.index') }}">Usuários</a>
                            @endcan
                            @can('custom-fields')
                                <a class="collapse-item" href="{{ route('custom_field.index') }}">Campos customizados</a>
                            @endcan
                        </div>
                    </div>
                </li>
            @endif
            <!-- Nav Item - Utilities Collapse Menu -->
            @if (auth()->user()->can('village-list') ||
    auth()->user()->can('type-list') ||
    auth()->user()->can('member-list'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Registro</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gerir:</h6>
                            @can('type-list')
                                <a class="collapse-item" href="{{ route('types.index') }}">Tipos</a>
                            @endcan
                            <!-- TODO::colocar relacionamento com campos customizados -->
                            @can('produto-list')
                                <a class="collapse-item" href="{{ route('produtos.index') }}">Produtos</a>
                            @endcan
                            @can('village-list')
                                <a class="collapse-item" href="{{ route('villages.index') }}">Vilas</a>
                            @endcan
                            @can('member-list')
                                <a class="collapse-item" href="{{ route('members.index') }}">Membros</a>
                            @endcan

                            <!-- TODO::colocar permissao para ver relatorio -->
                            <a class="collapse-item" href="{{ route('report_member.index') }}">Relatório</a>
                        </div>
                    </div>
                </li>
            @endif

            @if (auth()->user()->can('training-list') ||
    auth()->user()->can('training-schedule') ||
    auth()->user()->can('training-create'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwos"
                        aria-expanded="true" aria-controls="collapseTwos">
                        <i class="fas fa-poll"></i>
                        <span>Treinamento</span>
                    </a>
                    <div id="collapseTwos" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gerir:</h6>
                            @if (auth()->user()->can('training-list') ||
    auth()->user()->can('training-create'))
                                <a class="collapse-item" href="{{ route('addtrainings.index') }}">Criar
                                    Treinamento</a>
                            @endif
                            @if (auth()->user()->can('training-schedule'))
                                <a class="collapse-item" href="{{ route('schedule_training.index') }}">Agendar
                                    Treinamento</a>
                                <a class="collapse-item" href="{{ route('trainings.index') }}">Treinamentos
                                    Agendados</a>
                                <a class="collapse-item" href="{{ route('trainings.barcode') }}">Código de Barra</a>
                                <a class="collapse-item" href="{{ route('trainings.reports') }}"> Relatório</a>
                            @endif
                        </div>
                    </div>
                </li>
            @endif


            @if (auth()->user()->can('survey-list') ||
    auth()->user()->can('survey-create'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTw"
                        aria-expanded="true" aria-controls="collapseTwos">
                        <i class="fas fa-poll-h"></i>
                        <span>Inquérito</span>
                    </a>
                    <div id="collapseTw" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gerir:</h6>
                            <a class="collapse-item" href="{{ route('survey.index') }}">Criar Inquérito</a>
                        </div>
                    </div>
                </li>
            @endif

            @if (auth()->user()->can('message-list') ||
    auth()->user()->can('message-create'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMS"
                        aria-expanded="true" aria-controls="collapseMS">
                        <i class="fas fa-comment-dots"></i>
                        <span>Comunicação</span>
                    </a>
                    <div id="collapseMS" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Gerir:</h6>
                            <a class="collapse-item" href="{{ route('message.index') }}">Mensagens</a>
                        </div>
                    </div>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMap"
                    aria-expanded="true" aria-controls="collapseMap">
                    <i class="fa fa-map-marker"></i>
                    <span>Mapa</span>
                </a>
                <div id="collapseMap" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gerir:</h6>
                        <a class="collapse-item" href="{{ url('/map/render') }}">Ver mapas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- <!-- Heading --> --}}
            <div class="sidebar-heading">
                <i class="fas fa-plug"></i> PLUGINS
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            @if (config('app.htplugin') == true)
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHTPlugin"
                        aria-expanded="true" aria-controls="collapseHTPlugin">
                        <i class="fas fa-thumbtack"></i>
                        <span>Rastreio</span>
                    </a>
                    <div id="collapseHTPlugin" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Funcionalidades:</h6>
                            <a class="collapse-item" href="{{ route('recipients.index') }}">Gerir Recipientes</a>
                            <a class="collapse-item" href="{{ route('depositos.index') }}">Gerir Depósitos</a>
                            <a class="collapse-item" href="{{ route('tanques.index') }}">Gerir Tanques</a>
                        </div>
                    </div>
                </li>
            @endif

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
