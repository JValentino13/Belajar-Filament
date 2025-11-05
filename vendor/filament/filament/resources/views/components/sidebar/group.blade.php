@vite('resources/css/app.css')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Geist:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="container-logo">
    <p class="logo-rako">rako<span class="logo-rako-bn">bn</span></p>
</div>

@props([
    'active' => false,
    'collapsible' => true,
    'icon' => null,
    'items' => [],
    'label' => null,
    'sidebarCollapsible' => true,
    'subNavigation' => false,
])

@php
    $sidebarCollapsible = $sidebarCollapsible && filament()->isSidebarCollapsibleOnDesktop();
    $hasDropdown = filled($label) && filled($icon) && $sidebarCollapsible;
@endphp

<li
    x-data="{ label: @js($subNavigation ? "sub_navigation_{$label}" : $label) }"
    data-group-label="{{ $subNavigation ? "sub_navigation_{$label}" : $label }}"
    x-bind:class="{ 'fi-collapsed': $store.sidebar.groupIsCollapsed(label) }"
    {{
        $attributes->class([
            'fi-sidebar-group',
            'fi-active' => $active,
            'fi-collapsible' => $collapsible,
        ])
    }}
>
    @if ($label)
        <div
            @if ($collapsible)
                x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                role="button"
            @endif
            @if ($sidebarCollapsible)
                x-show="$store.sidebar.isOpen"
                x-transition:enter="fi-transition-enter"
                x-transition:enter-start="fi-transition-enter-start"
                x-transition:enter-end="fi-transition-enter-end"
            @endif
            class="fi-sidebar-group-btn"
        >
            @if ($icon)
                {{ \Filament\Support\generate_icon_html($icon, size: \Filament\Support\Enums\IconSize::Large) }}
            @endif

            <span class="fi-sidebar-group-label">
                {{ $label }}
            </span>

            @if ($collapsible)
                <x-filament::icon-button
                    color="gray"
                    :icon="\Filament\Support\Icons\Heroicon::ChevronUp"
                    :icon-alias="\Filament\View\PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON"
                    :label="$label"
                    x-bind:aria-expanded="! $store.sidebar.groupIsCollapsed(label)"
                    x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                    class="fi-sidebar-group-collapse-btn"
                />
            @endif
        </div>
    @endif

    @if ($hasDropdown)
        <x-filament::dropdown
            :placement="(__('filament-panels::layout.direction') === 'rtl') ? 'left-start' : 'right-start'"
            teleport
            x-show="! $store.sidebar.isOpen"
        >
            <x-slot name="trigger">
                <button
                    x-data="{ tooltip: false }"
                    x-effect="
                        tooltip = $store.sidebar.isOpen
                            ? false
                            : {
                                  content: @js($label),
                                  placement: document.dir === 'rtl' ? 'left' : 'right',
                                  theme: $store.theme,
                              }
                    "
                    x-tooltip.html="tooltip"
                    class="fi-sidebar-group-dropdown-trigger-btn"
                >
                    {{ \Filament\Support\generate_icon_html($icon, size: \Filament\Support\Enums\IconSize::Large) }}
                </button>
            </x-slot>

            @php
                $lists = [];

                foreach ($items as $item) {
                    if ($childItems = $item->getChildItems()) {
                        $lists[] = [
                            $item,
                            ...$childItems,
                        ];
                        $lists[] = [];

                        continue;
                    }

                    if (empty($lists)) {
                        $lists[] = [$item];

                        continue;
                    }

                    $lists[count($lists) - 1][] = $item;
                }

                if (empty($lists[count($lists) - 1])) {
                    array_pop($lists);
                }
            @endphp

            @if (filled($label))
                <x-filament::dropdown.header>
                    {{ $label }}
                </x-filament::dropdown.header>
            @endif

            @foreach ($lists as $list)
                <x-filament::dropdown.list>
                    @foreach ($list as $item)
                        @php
                            $itemIsActive = $item->isActive();
                            $itemBadge = $item->getBadge();
                            $itemBadgeColor = $item->getBadgeColor();
                            $itemBadgeTooltip = $item->getBadgeTooltip();
                            $itemUrl = $item->getUrl();
                            $itemIcon = $itemIsActive ? ($item->getActiveIcon() ?? $item->getIcon()) : $item->getIcon();
                            $shouldItemOpenUrlInNewTab = $item->shouldOpenUrlInNewTab();
                        @endphp

                        <x-filament::dropdown.list.item
                            :badge="$itemBadge"
                            :badge-color="$itemBadgeColor"
                            :badge-tooltip="$itemBadgeTooltip"
                            :color="$itemIsActive ? 'primary' : 'gray'"
                            :href="$itemUrl"
                            :icon="$itemIcon"
                            tag="a"
                            :target="$shouldItemOpenUrlInNewTab ? '_blank' : null"
                        >
                            {{ $item->getLabel() }}
                        </x-filament::dropdown.list.item>
                    @endforeach
                </x-filament::dropdown.list>
            @endforeach
        </x-filament::dropdown>
    @endif

    <ul
        @if (filled($label))
            @if ($sidebarCollapsible)
                x-show="$store.sidebar.isOpen ? ! $store.sidebar.groupIsCollapsed(label) : ! @js($hasDropdown)"
            @else
                x-show="! $store.sidebar.groupIsCollapsed(label)"
            @endif
            x-collapse.duration.200ms
        @endif
        @if ($sidebarCollapsible)
            x-transition:enter="fi-transition-enter"
            x-transition:enter-start="fi-transition-enter-start"
            x-transition:enter-end="fi-transition-enter-end"
        @endif
        class="fi-sidebar-group-items"
    >
        @foreach ($items as $item)
            @php
                $isItemActive = $item->isActive();
                $isItemChildItemsActive = $item->isChildItemsActive();
                $itemActiveIcon = $item->getActiveIcon();
                $itemBadge = $item->getBadge();
                $itemBadgeColor = $item->getBadgeColor();
                $itemBadgeTooltip = $item->getBadgeTooltip();
                $itemChildItems = $item->getChildItems();
                $itemIcon = $item->getIcon();
                $shouldItemOpenUrlInNewTab = $item->shouldOpenUrlInNewTab();
                $itemUrl = $item->getUrl();

                if ($icon) {
                    if ($hasDropdown || (blank($itemIcon) && blank($itemActiveIcon))) {
                        $itemIcon = null;
                        $itemActiveIcon = null;
                    } else {
                        throw new \Exception('Navigation group [' . $label . '] has an icon but one or more of its items also have icons. Either the group or its items can have icons, but not both. This is to ensure a proper user experience.');
                    }
                }
            @endphp

            <x-filament-panels::sidebar.item
                :active="$isItemActive"
                :active-child-items="$isItemChildItemsActive"
                :active-icon="$itemActiveIcon"
                :badge="$itemBadge"
                :badge-color="$itemBadgeColor"
                :badge-tooltip="$itemBadgeTooltip"
                :child-items="$itemChildItems"
                :first="$loop->first"
                :grouped="filled($label)"
                :icon="$itemIcon"
                :last="$loop->last"
                :should-open-url-in-new-tab="$shouldItemOpenUrlInNewTab"
                :sidebar-collapsible="$sidebarCollapsible"
                :url="$itemUrl"
            >
                {{ $item->getLabel() }}

                @if ($itemIcon instanceof \Illuminate\Contracts\Support\Htmlable)
                    <x-slot name="icon">
                        {{ $itemIcon }}
                    </x-slot>
                @endif

                @if ($itemActiveIcon instanceof \Illuminate\Contracts\Support\Htmlable)
                    <x-slot name="activeIcon">
                        {{ $itemActiveIcon }}
                    </x-slot>
                @endif
            </x-filament-panels::sidebar.item>
        @endforeach
    </ul>
</li>
