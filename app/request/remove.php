<?php
if ($this->do_have('phonebook', $this->post['id'], 'id') AND isset($this->post['status'])) {
        if ($this->post['status'] == true) {
            $this->delete('phonebook', $this->post['id']);
            $this->redirect();
        }
    }