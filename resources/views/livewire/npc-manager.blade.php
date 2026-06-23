<div class="p-6">
    <button wire:click="generate"
        class="mb-6 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
        Gerar NPC
    </button>

    <table class="w-full text-sm border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-2 border">Nome</th>
                <th class="p-2 border">Raça</th>
                <th class="p-2 border">Gênero</th>
                <th class="p-2 border">STR</th>
                <th class="p-2 border">DEX</th>
                <th class="p-2 border">CON</th>
                <th class="p-2 border">INT</th>
                <th class="p-2 border">WIS</th>
                <th class="p-2 border">CHA</th>
                <th class="p-2 border">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($npcs as $npc)
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border">{{ $npc->name }}</td>
                    <td class="p-2 border">{{ $npc->race }}</td>
                    <td class="p-2 border">{{ $npc->gender }}</td>
                    <td class="p-2 border">{{ $npc->strength }}</td>
                    <td class="p-2 border">{{ $npc->dexterity }}</td>
                    <td class="p-2 border">{{ $npc->constitution }}</td>
                    <td class="p-2 border">{{ $npc->intelligence }}</td>
                    <td class="p-2 border">{{ $npc->wisdom }}</td>
                    <td class="p-2 border">{{ $npc->charisma }}</td>
                    <td class="p-2 border">
                        <button wire:click="startEdit({{ $npc->id }})" style="background:#facc15;color:#fff;padding:2px 8px;border-radius:4px;font-size:12px">Editar</button>
                        <button wire:click="delete({{ $npc->id }})" style="background:#ef4444;color:#fff;padding:2px 8px;border-radius:4px;font-size:12px">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($editing)
    <div class="mt-6 p-4 border rounded bg-yellow-50">
        <h3 class="font-semibold mb-4">Editando NPC</h3>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-sm text-gray-600">Nome</label>
                <input wire:model="editName" class="border rounded px-2 py-1 w-full" />
                @error('editName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="text-sm text-gray-600">Raça</label>
                <input wire:model="editRace" class="border rounded px-2 py-1 w-full" />
                @error('editRace') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="text-sm text-gray-600">Gênero</label>
                <select wire:model="editGender" class="border rounded px-2 py-1 w-full">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div>
                <label class="text-sm text-gray-600">Traço</label>
                <input wire:model="editTrait" class="border rounded px-2 py-1 w-full" />
            </div>
            <div>
                <label class="text-sm text-gray-600">Ideal</label>
                <input wire:model="editIdeal" class="border rounded px-2 py-1 w-full" />
            </div>
            <div>
                <label class="text-sm text-gray-600">Descrição do Ideal</label>
                <input wire:model="editIdealDescription" class="border rounded px-2 py-1 w-full" />
            </div>
            <div>
                <label class="text-sm text-gray-600">Vínculo</label>
                <input wire:model="editBond" class="border rounded px-2 py-1 w-full" />
            </div>
            <div>
                <label class="text-sm text-gray-600">Falha</label>
                <input wire:model="editFlaw" class="border rounded px-2 py-1 w-full" />
            </div>
        </div>
        <div class="grid grid-cols-6 gap-2 mt-4">
            @foreach(['editStrength' => 'STR', 'editDexterity' => 'DEX', 'editConstitution' => 'CON', 'editIntelligence' => 'INT', 'editWisdom' => 'WIS', 'editCharisma' => 'CHA'] as $field => $label)
            <div>
                <label class="text-sm text-gray-600">{{ $label }}</label>
                <input wire:model="{{ $field }}" type="number" min="-5" max="5" class="border rounded px-2 py-1 w-full" />
                @error($field) <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            @endforeach
        </div>
        <div class="mt-4 flex gap-2">
            <button wire:click="update" style="background:#22c55e;color:#fff;padding:6px 16px;border-radius:4px">Salvar</button>
            <button wire:click="cancelEdit" style="background:#6b7280;color:#fff;padding:6px 16px;border-radius:4px">Cancelar</button>
        </div>
    </div>
    @endif
</div>