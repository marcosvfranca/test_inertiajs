<template>
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div
          class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
        >
          <table-list>
            <t-head-table-list>
              <tr>
                <th-table-list>Nome</th-table-list>
                <th-table-list>Preço</th-table-list>
                <actions-th-table-list class="text-right text-sm font-medium"
                  >Ações</actions-th-table-list
                >
              </tr>
            </t-head-table-list>
            <t-body-table-list>
              <tr v-for="product in products.data" :key="product.id">
                <td-table-list>
                  <div class="flex items-center">
                    {{ product.name }}
                  </div>
                </td-table-list>
                <td-table-list>
                  {{ Number(product.price).toFixed(2) }}
                </td-table-list>
                <td-table-list-actions
                  :routes="{
                    edit: route('products.edit', product),
                    delete: route('products.destroy', product),
                  }"
                />
              </tr>
            </t-body-table-list>
          </table-list>
          <pagination class="mt-6" :pagination="products" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import TableList from "@/Components/Table/TableList.vue";
import THeadTableList from "@/Components/Table/THeadTableList.vue";
import TBodyTableList from "@/Components/Table/TBodyTableList.vue";
import ThTableList from "@/Components/Table/ThTableList.vue";
import TdTableList from "@/Components/Table/TdTableList.vue";
import ActionsThTableList from "@/Components/Table/ActionsThTableList.vue";
import TdTableListActions from "@/Components/Table/TdTableListActions.vue";
import Pagination from "@/Components/Pagination";
import moment from "moment";

export default {
  components: {
    TableList,
    THeadTableList,
    TBodyTableList,
    ThTableList,
    TdTableList,
    ActionsThTableList,
    Pagination,
    TdTableListActions,
  },
  props: {
    products: Object,
  },
};
</script>