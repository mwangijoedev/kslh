  <nav aria-label="Breadcrumb" class="text-xs text-center mt-2">
      <ol role="list" class="ml-10 flex max-w-2xl items-center space-x-2 lg:max-w-7xl text-gray-500">
        <li>
          <!-- standard home -->
          <div class="flex items-center">
            <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-hotel'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Hotel
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-amber-700">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-room'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Room
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-amber-700">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-restaurant'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Restaurant
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-amber-700">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-bar'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Bar
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-amber-700">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-hall'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Hall
            </a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-amber-700">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li class="text-sm">
          <a href="/create-hotel" 
                @class([
                    'text-amber-700'=>request()->is('create-event'),
                    'text-sm font-medium hover:text-gray-400 transition'=>true
                ])>Event
            </a>
        </li>
      </ol>
    </nav>