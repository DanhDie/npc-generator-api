<?php
namespace App\Livewire;

use App\Models\Npc;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NpcManager extends Component
{
    # Coisas visíveis para a view
    public $npcs;
    public $editing = null;
    public $editName, $editRace, $editGender;
    public $editTrait, $editIdeal, $editIdealDescription, $editBond, $editFlaw;
    public $editStrength, $editDexterity, $editConstitution;
    public $editIntelligence, $editWisdom, $editCharisma;

    public function mount()
    {
        $this->loadNpcs();
    }

    # Aquela coisa que o professor explicou de não precisar SQL puro, mas sim um ORM do Laravel
    public function loadNpcs()
    {
        $this->npcs = Npc::where('user_id', Auth::id())->latest()->get();
    }

    # Botão de gerar NPC para caso você queira fazer pela dashboard e não pela API
    public function generate()
    {
        app(\App\Http\Controllers\NpcController::class)
            ->generate(request());
        $this->loadNpcs();
    }

    # Pega os dados reais do NPC com base em $id e coloca nas variáveis públicas de edição
    public function startEdit(int $id)
    {
        $npc = Npc::findOrFail($id);
        $this->editing               = $id;
        $this->editName              = $npc->name;
        $this->editRace              = $npc->race;
        $this->editGender            = $npc->gender;
        $this->editTrait             = $npc->trait;
        $this->editIdeal             = $npc->ideal;
        $this->editIdealDescription  = $npc->ideal_description;
        $this->editBond              = $npc->bond;
        $this->editFlaw              = $npc->flaw;
        $this->editStrength          = $npc->strength;
        $this->editDexterity         = $npc->dexterity;
        $this->editConstitution      = $npc->constitution;
        $this->editIntelligence      = $npc->intelligence;
        $this->editWisdom            = $npc->wisdom;
        $this->editCharisma          = $npc->charisma;
    }

    #Atualização das informações do NPC quando o usuário clicar em salvar
    public function update()
    {
        # validate() é uma função do próprio livewire
        # funciona tipo 
        # 'campo' =>  'regra1 | regra2'
        $this->validate([
            'editName'             => 'required|string|max:255',
            'editRace'             => 'required|string|max:255',
            'editGender'           => 'required|in:M,F,A',
            'editTrait'            => 'required|string',
            'editIdeal'            => 'required|string',
            'editIdealDescription' => 'required|string',
            'editBond'             => 'required|string',
            'editFlaw'             => 'required|string',
            'editStrength'         => 'required|integer',
            'editDexterity'        => 'required|integer',
            'editConstitution'     => 'required|integer',
            'editIntelligence'     => 'required|integer',
            'editWisdom'           => 'required|integer',
            'editCharisma'         => 'required|integer',
        ]);

        # Aqui atualiza a instancia da tabela do NPC
        Npc::findOrFail($this->editing)->update([
            'name'             => $this->editName,
            'race'             => $this->editRace,
            'gender'           => $this->editGender,
            'trait'            => $this->editTrait,
            'ideal'            => $this->editIdeal,
            'ideal_description'=> $this->editIdealDescription,
            'bond'             => $this->editBond,
            'flaw'             => $this->editFlaw,
            'strength'         => $this->editStrength,
            'dexterity'        => $this->editDexterity,
            'constitution'     => $this->editConstitution,
            'intelligence'     => $this->editIntelligence,
            'wisdom'           => $this->editWisdom,
            'charisma'         => $this->editCharisma,
        ]);

        $this->editing = null; # desativa o modo de edição
        $this->loadNpcs(); # recarrega lista
    }

    # Delete :P
    public function delete(int $id)
    {
        Npc::findOrFail($id)->delete();
        $this->loadNpcs();
    }

    # Cancelar editar :P
    public function cancelEdit()
    {
        $this->editing = null;
    }

    # Renderiza a view do livewire
    public function render()
    {
        return view('livewire.npc-manager');
    }
}