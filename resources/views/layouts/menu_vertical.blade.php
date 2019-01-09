<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/cliente') }}">Clientes</a></li>
                    <li><a href="{{ url('/fornecedor') }}">Fornecedores</a></li>
                    <li><a href="{{ url('/funcionario') }}">Funcionários</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Produto<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/produto') }}">Gerenciar Produtos</a></li>
                    <li><a href="/">Menu</a></li>
                    <li><a href="/">Perfil</a></li>
                    <li><a href="/">Usuário do Sistema</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Configuração<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/">Dados da Empresa</a></li>
                    <li><a href="/">Menu</a></li>
                    <li><a href="/">Perfil</a></li>
                    <li><a href="/">Usuário do Sistema</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>