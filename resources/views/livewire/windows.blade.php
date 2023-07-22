<div class="space-y-4">

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Separate Window</h1>

        <button wire:click="openWindow" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Window to URL</h1>

        <button wire:click="openWindowToUrl" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Window with Size Restrictions</h1>

        <button wire:click="openWindowWithSizeRestrictions" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>

        <div class="bg-yellow-200 p-2 mt-4">It doesn't appear that max sizes are being honored.</div>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Change Positioning Of Window</h1>

        <button wire:click="changePositioning" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Non-Resizable Window</h1>

        <button wire:click="notResizeable" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Non-Movable Window</h1>

        <button wire:click="nonMovable" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>


        <div class="bg-yellow-200 p-2 mt-4">It doesn't appear to work on open separate windows.</div>
    </div>

    <div class="border-2 rounded shadow p-4">

        <h1 class="text-lg">Open Window without Shadow</h1>

        <button wire:click="noShadow" class="bg-black text-white rounded-full px-4 py-2 text-center">Open Window</button>
    </div>


</div>
