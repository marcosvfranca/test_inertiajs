<template>
  <form @submit.prevent="submit">
    <default-form>
      <div class="mt-4">
        <jet-label for="name" value="Nome" />
        <jet-input
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          autofocus
        />
      </div>
      <div class="mt-4">
        <jet-label for="birth_date" value="Data de nascimento" />
        <jet-input
          id="birth_date"
          type="date"
          class="mt-1 block w-full"
          v-model="form.birth_date"
          required
        />
      </div>
      <div class="flex items-center justify-end mt-4">
        <jet-button
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          {{ customer ? "Alterar" : "Cadastrar" }}
        </jet-button>
      </div>
    </default-form>
  </form>
</template>

<script>
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import DefaultForm from "@/Components/Forms/Default.vue";

export default {
  components: {
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    DefaultForm,
  },
  props: {
    customer: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      form: this.$inertia.form({
        ...this.getClearForm(),
        ...this.customer?.data,
      }),
    };
  },
  methods: {
    submit() {
      this.customer
        ? this.form.put(this.route("customers.update", this.customer.data))
        : this.form.post(this.route("customers.store"));
    },
    getClearForm() {
      return {
        name: null,
        birth_date: null,
      };
    },
  },
};
</script>