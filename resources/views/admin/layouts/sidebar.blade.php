<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Route::is(['admin.dashboard']) ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa-solid fa-gauge"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="{{ Route::is(['admin.agent.management', 'admin.add.agent', 'admin.agent.profile', 'admin.edit.agent']) ? 'active' : '' }}">
                    <a href="{{ route('admin.agent.management') }}">
                        <i class="fa-solid fa-user-secret"></i>
                        <span>
                            Agent Management
                        </span>
                    </a>
                </li>
                <li class="{{ Route::is(['admin.lead.management', 'admin.add.lead', 'admin.edit.lead', 'admin.lead.details']) ? 'active' : '' }}">
                    <a href="{{ route('admin.lead.management') }}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span>
                            Lead Management
                        </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="fa-regular fa-square-check"></i>
                        <span>
                            Leads Assigning
                        </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ Route::is(['admin.assigned.leads', 'admin.unassigned.leads']) ? 'block' : 'none' }};">
                        <li>
                            <a class="{{ Route::is(['admin.assigned.leads']) ? 'active' : '' }}" href="{{ route('admin.assigned.leads') }}">
                                Assigned Leads
                            </a>
                        </li>
                        <li>
                            <a class="{{ Route::is(['admin.unassigned.leads']) ? 'active' : '' }}" href="{{ route('admin.unassigned.leads') }}">
                                Unassigned Leads
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Route::is(['admin.newsletter.management']) ? 'active' : '' }}">
                    <a href="{{ route('admin.newsletter.management') }}">
                        <i class="fa-solid fa-envelope"></i>
                        <span>
                            Newsletter
                        </span>
                    </a>
                </li>
                <li class="{{ Route::is(['admin.property.reports', 'admin.property.report.details']) ? 'active' : '' }}">
                    <a href="{{ route('admin.property.reports') }}">
                        <i class="fa-solid fa-folder-open"></i>
                        <span>
                            Property Reports
                        </span>
                    </a>
                </li>
                <li class="{{ Route::is(['admin.contact.management', 'admin.contact.details']) ? 'active' : '' }}">
                    <a href="{{ route('admin.contact.management') }}">
                        <i class="fa-solid fa-envelopes-bulk"></i>
                        <span>
                            Contact Leads
                        </span>
                    </a>
                </li>
                <li class="{{ Route::is(['admin.profile']) ? 'active' : '' }}">
                    <a href="{{ route('admin.profile') }}">
                        <i class="fa-solid fa-gear"></i>
                        <span>
                            Profile Settings
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
