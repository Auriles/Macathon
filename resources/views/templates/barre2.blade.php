            <div id="search-navbar">
                <select href="#" class="btn dropdown-toggle input-navbar btn-block btn-sm btn-glossy btn-white"
                        data-toggle="dropdown" aria-expanded="false" name="service">Sur quel appareil ?
                    <option value="1" class="a-btn a-block">Ordinateur</option>
                    <option value="2" class="a-btn a-block">Box / Internet</option>

                    <option value="3" class="a-btn a-block">Périphérique externe en wifi</option>
                    <option value="4" class="a-btn a-block">Smartphone</option>
                    <option value="5" class="a-btn a-block">Connectique</option>

                    <option value="6" class="a-btn a-block">Smart TV</option>

                    <option value="7" class="a-btn a-block">Cloud</option>

                </select>

                <input class="form-control input-navbar " required id="cdepostal"
                       data-validation-required-message="cdepostal is required."
                       placeholder="Veuillez saisir votre code postal" name="zipcode"/>
                <a href="{{route('rechercheIntervenant')}}" class="btn input-navbar  btn-success btn-block btn-white">Rechercher</a>
            </div>
