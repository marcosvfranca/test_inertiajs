<template>
  <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
    <div class="flex-1 flex justify-between sm:hidden">
      <Link :href="pagination.prev_page_url" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
        Anterior
      </Link>
      <a :href="pagination.next_page_url" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
        Próximo
      </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Mostrando de {{ pagination.from }} até {{ pagination.to }} de {{ pagination.total }} resultados
        </p>
      </div>
      <div>
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Paginação">
          <Link :href="pagination.prev_page_url" :class="{'opacity-50': !pagination.prev_page_url}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Anterior</span>
            <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
          </Link>
          <template v-for="(link, key) in pagination.links">
            <Link v-if="link.label"
                :key="key" 
                :href="link.url"
                class="relative inline-flex items-center px-4 py-2 border text-sm font-medium"
                :class="{'z-10 bg-indigo-50 border-indigo-500 text-indigo-600': link.active, 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50': !link.active}">
                {{ link.label }}
            </Link>
          </template>
          <Link :href="pagination.next_page_url" :class="{'opacity-50': !pagination.next_page_url}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Próximo</span>
            <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
          </Link>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/solid'

export default {
  components: {
    Link,
    ChevronLeftIcon,
    ChevronRightIcon
  },
  props: {
    pagination: Object,
  },
  created() {
    console.log(this.pagination)
  }
};
</script>