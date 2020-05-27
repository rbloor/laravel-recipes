@extends('layouts.default')

@section('content')

<div class="uk-background-cover uk-height-large" style="background-image: url('{{ asset('img/recipes/'.$recipe->image) }}');"></div>

<!-- INTRODUCTION -->
<div class="uk-section uk-section-small uk-padding-remove-top" style="margin-top: -60px;">
    <div class="uk-container">
        <div class="uk-background-default uk-padding">
            <h1 class="uk-text-bold uk-margin-remove-top">{{ $recipe->title }}</h1>
            <p class="uk-text-lead uk-margin-remove-bottom">With Lemon Zest</p>
            <p>{{ $recipe->description }}</p>
        </div>
    </div>   
</div>

<div class="uk-section uk-section-small uk-padding-remove-top">
    <div class="uk-container">
        <div class="uk-grid" data-ukgrid>

            <!-- INGREDIENTS -->
            <div class="uk-width-3-5@m">
                <div class="uk-background-default uk-padding">
                    <h3>Ingredients</h3>
                    <div class="uk-child-width-1-2@m uk-child-width-1-2@s" uk-grid>
                        @foreach ($recipe->ingredients as $ingredient)
                            <div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
                                <div class="uk-width-auto uk-first-column">
                                    <img src="{{ asset('img/ingredients/soy-sauce.png') }}" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <p class="uk-margin-remove">{{ $ingredient->title }}</p>
                                    <p class="uk-margin-remove uk-text-lighter">{{ round($ingredient->pivot->quantity) }} {{ $ingredient->pivot->unit }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="uk-width-2-5@m">
                <div class="uk-background-default uk-padding uk-margin-bottom">

                    <!-- RECIPE -->
                    <h3>Recipe Information</h3>
                    <table class="uk-table uk-table-small uk-table-striped uk-table-hover uk-margin-remove-bottom">
                        <tbody>
                            <tr>
                                <td>Cooking time</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->cooking_time }} minutes</td>
                            </tr>
                            <tr>
                                <td>Chef Level</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->level }}</td>
                            </tr>
                            <tr>
                                <td>User Rating</td>
                                <td class="uk-text-right">
                                    @for ($i = 0; $i < $recipe->rating; $i++)
                                        <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                    @endfor
                                </td>
                            </tr>
                            <tr>
                                <td>Categories</td>
                                <td class="uk-text-lighter uk-text-right">
                                    @foreach ($recipe->categories as $category)
                                        <span class="uk-label uk-text-light">{{ $category->title }}</span>
                                    @endforeach
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

                <!-- NUTRITIONAL -->
                <div class="uk-background-default uk-padding">
                    <h3>Nutritional Information</h3>
                    <table class="uk-table uk-table-striped uk-table-small uk-table-hover uk-margin-remove-bottom">
                        <tbody>
                            <tr>
                                <td>Calories</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->calories }} kcal</td>
                            </tr>
                            <tr>
                                <td>Fat</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->fat }} g</td>
                            </tr>
                            <tr>
                                <td>of which saturates</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->saturated_fat }} g</td>
                            </tr>
                            <tr>
                                <td>Carbohydrate</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->carbs }} g</td>
                            </tr>
                            <tr>
                                <td>of which sugars</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->sugar }} g</td>
                            </tr>
                            <tr>
                                <td>Protein</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->protein }} g</td>
                            </tr>
                            <tr>
                                <td>Salt</td>
                                <td class="uk-text-lighter uk-text-right">{{ $recipe->salt }} g</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- STEPS -->
<div class="uk-section uk-section-small uk-padding-remove-top">
    <div class="uk-container">
        <div class="uk-background-default uk-padding">
            <h3>Steps</h3>
            @foreach ($recipe->steps as $i => $step)
                <div class="uk-grid uk-grid-small" data-ukgrid>
                    <div class="uk-width-1-3@m">
                        <img src="https://img.hellofresh.com/f_auto,fl_lossy,q_auto,w_680/hellofresh_s3/5d7a60528d88ef00162c8823/step-acbdf09a.jpg" alt="">
                    </div>
                    <div class="uk-width-auto uk-margin-auto">
                        <span class="step-number uk-background-muted uk-text-large uk-text-light">{{ $i + 1 }}</span>
                    </div>
                    <div class="uk-width-expand@m">
                        <p class="uk-text-light">{{ $step->description }}</p>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>

@endsection
